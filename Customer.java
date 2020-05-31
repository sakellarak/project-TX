
/**
 * Write a description of class Customer here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
import java.util.*;
public class Customer extends User
{
    public String address;
    public int paymentID;
    public Customer(String name, String password, int userID, String email, int telephone_number, String address, int paymentID){
        super(name, password, userID, email, telephone_number);
    }    
    public void getInfo() {
    System.out.println(name + password + userID + email + telephone_number+ address + paymentID);
    }
    public void check() {}
    public void update() {}
    public void checkpass() {}
}
