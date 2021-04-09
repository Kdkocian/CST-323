package business;

import java.util.ArrayList;
import java.util.List;

import javax.annotation.Resource;
import javax.annotation.Resources;
import javax.ejb.Local;
import javax.ejb.LocalBean;
import javax.ejb.Stateless;
import javax.enterprise.inject.Alternative;
import javax.jms.Connection;
import javax.jms.ConnectionFactory;
import javax.jms.JMSException;
import javax.jms.MessageProducer;
import javax.jms.Queue;
import javax.jms.Session;
import javax.jms.TextMessage;

import beans.Order;
import beans.Orders;

/**
 * Session Bean implementation class OrdersBusinessService
 */
@Stateless
@Local(OrdersBusinessInterFace.class)
@LocalBean
@Alternative
public class OrdersBusinessService implements OrdersBusinessInterFace {
	
	private List<Order> orders;
	
	@Resource (mappedName= "java:/ConnectionFactory")
	private ConnectionFactory connectionFactory;
	
	@Resource (mappedName= "java:/jms/queue/Order")
	private Queue queue;
	
    /**
     * Default constructor. 
     */
    public OrdersBusinessService() {
    	ArrayList<Order> dummyData = new ArrayList<Order>();
		dummyData.add(new Order("0000010", "Product 1", 1.00f, 15));
		dummyData.add(new Order("0000020", "Product 2", 2.00f, 16));
		
		this.orders = dummyData;
    }

	
    public void test() {
       
    	System.out.println("Hello from the OrdersBusinessService");
    	
    }

    @Override
	public List<Order> getOrders() {
		
		return this.orders;
	}

	@Override
	public void setOrders(List<Order> orders) {
	
		this.orders = orders;
		
	}
	@Override
	public void sendOrder(Order order) {
		try 
		{
			Connection connection = connectionFactory.createConnection();
			Session  session = connection.createSession(false, Session.AUTO_ACKNOWLEDGE);
			MessageProducer messageProducer = session.createProducer(queue);
			TextMessage message1 = session.createTextMessage();
			message1.setText("This is test message");
			messageProducer.send(message1);
			connection.close();
		} 
		catch (JMSException e) 
		{

		}
		
	}

}
