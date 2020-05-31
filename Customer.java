
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
    boolean flag=true;
    int len;
    
        public Customer(String name, String password, int userID, String email, int telephone_number, String address, int paymentID){
        super(name, password, userID, email, telephone_number);
    }    
    public void getInfo() {
    System.out.println(name + password + userID + email + telephone_number+ this.address + this.paymentID);
    }
    public boolean checkaddress() {
        System.out.println("true");
        return true;
    }
    public void update() {}
    public boolean checkpassword() {
        len=password.length();
    if (len>16 || len<4){
        flag= false;
        System.out.println("password not okay");
    }
    return flag;
    }
    public void checktelephonenumber(){}
}
