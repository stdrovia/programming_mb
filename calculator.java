import java.util.*;

public class Hello {
    public static void main(String[] args)
    {
	    // TODO: Change numbers
	    // TODO: Add multiplication
	    // TODO: Add division "/"

		////	
        int num1 = 2;
        int num2 = 4;
        
        int operator = 1;
        ////
        String[] operators = {"+", "-", "*", "/"};
       
        
        System.out.println("The answer for " + num1 + " " + operators[operator - 1] + " " + num2 + " is: ");
        

        switch (operator){
        case 1:
            System.out.println(add(num1,num2));
            break;
        case 2:
            System.out.println(sub(num1,num2));
            break;      
//        case 3:
//            System.out.println(mult(num1,num2));
//            break;
//        case 4:
//            System.out.println(div(num1,num2));
//            break;
            default:
                System.out.println("Illigal Operation");
        }
    }
    
    public static int add(int x, int y)
    {
        int result = x + y;
        return result;
    }
    
    public static int sub(int x, int y)
    {
        int result = x - y;
        return result;
    }

//    public static int mult(int x, int y)
//    {
//        int result = x * y;
//        return result;
//    }
}
