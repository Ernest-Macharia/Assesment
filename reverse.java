import java.lang.*;
import java.io.*;
import java.util.*;
 
// Class of Reverse
class Reverse {
    public static void main(String[] args)
    {
        String s = "coding is fun";
 
        // convert String to character array
        // by using toCharArray
        char[] fun = s.toCharArray();
 
        for (int i = fun.length - 1; i >= 0; i--)
            System.out.print(fun[i]);
    }
}