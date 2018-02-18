package com.company;
import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        String line1=scan.nextLine();
        if (line1.equals("a") || line1.equals("e") || line1.equals("e") || line1.equals("o") || line1.equals("u") || line1.equals("i")) {
            System.out.println("vowel");
        }
        else if (line1.equals("0") || line1.equals("1") || line1.equals("2") || line1.equals("3") || line1.equals("4") || line1.equals("5") || line1.equals("6") || line1.equals("7") || line1.equals("8") || line1.equals("9")) {
            System.out.println("digit");
        }
        else
        {
            System.out.println("other");
        }
    }
}
