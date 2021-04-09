package business;

import java.util.List;

import beans.Order;
import beans.Orders;

public interface OrdersBusinessInterFace {

	public void test();
	
	public List<Order> getOrders();
	
	public void setOrders(List<Order> orders);
	
	public void sendOrder(Order order);
	
}
