import java.util.*;

public class Test{
    public static void main(String[] args){
        
        Scanner scanner = new Scanner(System.in);
        System.out.println("Please enter first number");
        int num1 = scanner.nextInt();
        System.out.println("Please enter second number");
        int num2 = scanner.nextInt();
        int sum = num1 + num2;
        System.out.println("first num + second number = " + sum);
        System.out.println("------------------------------------------------------------");
       
        //conditional
        int x = 20;
        int y = 60;
        if(x < y){
           System.out.println("x less than y");
        }
        else{
           System.out.println("y less than x");
        }
        System.out.println("------------------------------------------------------------");

        System.out.println("=======================");
        System.out.println("1- Add");
        System.out.println("2- Sub");
        System.out.println("3- Mul");
        System.out.println("4- Div");
        System.out.println("5- Quite");
        System.out.println("=======================");
        System.out.println("Please enter choise");

        int choise = scanner.nextInt();
        int result = 0;
        switch(choise){
            case 1: result = num1 + num2; break;
            case 2: result = num1 - num2; break;
            case 3: result = num1 * num2; break;
            case 4: result = num1 / num2; break;
            default: {
                System.out.println("Invalid Input");
            }
        }
        System.out.println("Result = " + result);
        System.out.println("------------------------------------------------------------");

        //loops
        int i = 0;
        while(i<10){
            System.out.println("Amazing!");
            i++;
        }

        for(int j=0; j<10; j++){
            System.out.println("Great!");
        }
    }
}