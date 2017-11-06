import edu.princeton.cs.algs4.*;
import java.util.*;
public class Create {
    
    
    public static void main(String[] args) { 
        String [] equip = StdIn.readAllLines();
       // StdOut.println(equip.length);
        int id = 1;
        for( int i =0; i<equip.length; i++){
              StdOut.println("('"+id+"', '"+equip[i]+"', 150),");
              id++;
        }
            
        }
    }

    

    

