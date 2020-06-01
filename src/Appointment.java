import java.io.*; 
public class Appointment {
  int appointmentID,proID,customerID;
  String datetime,paymentmethod,critique;
  boolean new_appointment,set_appointment,done_appointment;
  
  public Appointment(int appID, int prID, int custID, String dt, String pm, String crit, boolean newapp, boolean setapp, boolean doneapp) {
   this.appointmentID = appID;
   this.proID = prID;
   this.customerID = custID;
   this.datetime = dt;
   this.paymentmethod = pm;
   this.critique = crit;
   this.new_appointment = newapp;
   this.set_appointment = setapp;
   this.done_appointment = doneapp;
  }
  
    static int isEmpty(Appointment a,int i) {     //elegxei gia sugkekrimeno tupo rantevou kai epistrefei to h' ta rantevou pou vrike//
    if (a.new_appointment == true && i == 1){
        System.out.println("Yparxei aithsh gia neo rantevou me ID:" +a.appointmentID);
        return a.appointmentID;
    }
    else if (a.new_appointment == false && i == 1){
        System.out.println("Den yparxoun aithseis gia nea rantevou");
    }
    
    if (a.set_appointment == true && i == 2){
        System.out.println("Yparxei kleismeno rantevou me ID:" +a.appointmentID);
        return a.appointmentID;
    }
    else if ( a.set_appointment == false && i == 2){
        System.out.println("Den yparxoun kleismena rantevou");
    }
    
    if (a.done_appointment == true && i == 3){
        System.out.println("Oloklhrwmeno rantevou me ID:" +a.appointmentID);
        return a.appointmentID;
    }
    else if(a.done_appointment == false && i == 3){
        System.out.println("Den uparxoun oloklhrwmena rantevou");
    }
    return 0;
}

 public static void main(String[] args) {
    int temp1,temp2,temp3;
    Appointment app1 = new Appointment(1111,123,5775,"aurio","karta","kalos kalos",true,false,false); 
    Appointment app2 = new Appointment(2222,1234,5775,"methaurio","metrita","kakos kakos",false,true,false); 
    Appointment app3 = new Appointment(3333,12345,5775,"paramethaurio","karta","apsogos",false,false,true); 
    temp1=isEmpty(app1,1);
    temp2=isEmpty(app2,2);
    temp3=isEmpty(app3,3);
 }
}