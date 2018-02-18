package com.company;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String line=scan.nextLine();
        int b =Integer.parseInt(line, 16);
        System.out.println(b);
    }
}
