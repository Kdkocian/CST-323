package beans;

import javax.enterprise.inject.Produces;
import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name = "Order")
public class Order {

	String orderNumber;
	String productName;
	
	Float priceProperty;
	
	int propertyQuantity = 0;

	public String getOrderNumber() {
		return orderNumber;
	}

	public void setOrderNumber(String orderNumber) {
		this.orderNumber = orderNumber;
	}

	public String getProductName() {
		return productName;
	}

	public void setProductName(String productName) {
		this.productName = productName;
	}

	public Float getPriceProperty() {
		return priceProperty;
	}

	public void setPriceProperty(Float priceProperty) {
		this.priceProperty = priceProperty;
	}

	public int getPropertyQuantity() {
		return propertyQuantity;
	}

	public void setPropertyQuantity(int propertyQuantity) {
		this.propertyQuantity = propertyQuantity;
	}
	

	public Order(String orderNumber, String productName, Float priceProperty, int propertyQuantity) {
		super();
		this.orderNumber = orderNumber;
		this.productName = productName;
		this.priceProperty = priceProperty;
		this.propertyQuantity = propertyQuantity;
	}

	public Order() {
		super();
	}
	
}