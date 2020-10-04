import java.util.*;

public class Str{
    public static void main(String[] args){
        String str1 = "Hello";
        String str2 = "Dana";
        String message = str1 + " " + str2;
        System.out.println(message);
        System.out.println(message.length());

        String sub = message.substring(0,4);
        System.out.println(sub);
    }
}