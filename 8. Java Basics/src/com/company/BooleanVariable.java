package com.company;
import java.util.Objects;
import java.util.Scanner;

public class BooleanVariable {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String line=scan.nextLine();
        if (line.equals("True"))
        {
            System.out.println("Yes");
        }
        else if (Objects.equals(line, "False")) {
            System.out.println("No");
        }
    }
}
