
/**
 * Superclass client kai pro den 8a exei instances
 *
 * @author kourhs
 * 
 */
public class User
{
    public String name;
    public String password;
    public int userID;
    public String email;
    public int telephone_number;
    public User(String name, String password, int userID, String email, int telephone_number){
    this.name=new String(name);
    this.password=new String(password);
    this.userID=userID;
    this.email=new String(email);
    this.telephone_number=telephone_number;
    }
    
    //public void getInfo() {}
    public void check() {}
    public void update() {}
    public void checkpass() {}
    
}
