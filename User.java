public class User
{
    public String name;
    public String password;
    public int userID;
    public String email;
    public int telephone_number;

    public int len;
    public boolean flag=true;

    public User(String name, String password, int userID, String email, int telephone_number){
    this.name=new String(name);
    this.password=new String(password);
    this.userID=userID;
    this.email=new String(email);
    this.telephone_number=telephone_number;
    }
    
    public void getInfo() {}
    public boolean checkaddress() {return true;}
    public boolean checkpassword(String password) {
        len=password.length();
    if (len>16 || len<4){
        flag= false;
        System.out.println("password not okay");
    }
    return flag;
    }
    public void checktelephonenumber() {}
    public void update() {}
    
    
}