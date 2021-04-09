package beans;

import java.util.ArrayList;
import java.util.List;

import javax.faces.bean.ManagedBean;
import javax.faces.bean.ViewScoped;

@ManagedBean
@ViewScoped

public class Orders {
	List<Order> ordersList;

	public List<Order> getOrdersList() {
		return ordersList;
	}

	public void setOrdersList(List<Order> ordersList) {
		this.ordersList = ordersList;
	}

	public Orders() {
		super();
		ArrayList<Order> dummyData = new ArrayList<Order>();
		dummyData.add(new Order("0000001", "Product 1", 1.00f, 10));
		dummyData.add(new Order("0000002", "Product 2", 2.00f, 10));
		
		this.ordersList = dummyData;
	}
	
}
