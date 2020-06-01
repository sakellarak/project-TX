public class Professional extends User{

    String jobName;
    String jobDescription;
    String address;
    double range;
    String workingHours;
    double pricing;
    String paymentMethod; //ανά ώρα ή ανά ραντεβού
    boolean photo;
    double rating;

    public Professional(String name, String password, int userID, String email, int telephone_number, String jobName, String jobDescription, String address, double range, String workingHours, double pricing, String paymentMethod, boolean photo, double rating){
        super(name, password, userID, email, telephone_number);
        this.jobName=jobName;
        this.jobDescription=jobDescription;
        this.address=address;
        this.range=range;
        this.workingHours=workingHours;
        this.pricing=pricing;
        this.paymentMethod=paymentMethod;
        this.photo=photo;
        this.rating=rating;
    }

    public void updateArea(String address, double range, String workingHours){

        this.address=address;
        this.range=range;
        this.workingHours=workingHours;
    }

    public void updateDesc(String jobDescription, boolean photo){

        this.jobDescription=jobDescription;
        this.photo=photo;
    }

    public void updatePricing(double pricing, String paymentMethod){

        this.pricing=pricing;
        this.paymentMethod=paymentMethod;
    }

    public void getInfo() {
        
        System.out.println(name + " " + telephone_number + " " + jobDescription);
    }

    public void inRange() {}
    
    public void do1() {}   //?????
    
    public void addCritic() {}
    
    
    /*
    public static void main(final String[] args) {

        Professional pelaths = new Professional("Mixalhs","kwdikos",123,"kourhs@kourhs.com",12345,"giafka","perigrafh","dieuthynsh",10,"10-2",50,"ana radevou",true,4);
        System.out.println(pelaths.jobDescription);
        
        
    }
    */
}