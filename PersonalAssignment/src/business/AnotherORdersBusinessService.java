package business;

import java.util.ArrayList;
import java.util.List;

import javax.ejb.Local;
import javax.ejb.LocalBean;
import javax.ejb.Stateless;
import javax.enterprise.inject.Alternative;

import beans.Order;
import beans.Orders;

/**
 * Session Bean implementation class AnotherORdersBusinessService
 */
@Stateless
@Local(OrdersBusinessInterFace.class)
@LocalBean
@Alternative
public class AnotherORdersBusinessService implements OrdersBusinessInterFace {
	
	private List<Order> orders;
	
    /**
     * Default constructor. 
     */
    public AnotherORdersBusinessService() {
    	ArrayList<Order> dummyData = new ArrayList<Order>();
		dummyData.add(new Order("0000015", "Product 1", 1.00f, 11));
		dummyData.add(new Order("0000022", "Product 2", 2.00f, 18));
		
		this.orders = dummyData;
    }

	/**
     * @see OrdersBusinessInterFace#test()
     */
    public void test() {
        
    	System.out.println("Hello from the Another OrdersBusinessService");
    	
    }

	@Override
	public List<Order> getOrders() {
		
		return this.orders;
	}

	@Override
	public void setOrders(List<Order> orders) {
		
		this.orders = orders;
		
	}

}
