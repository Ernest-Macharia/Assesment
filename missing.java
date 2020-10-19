class Main {
    
    static int MissingNum(int k[], int n)
    {
        int i, accumulate;
        accumulate = (n + 1) * (n + 2) / 2;
        for (i = 0; i < n; i++)
            accumulate += k[i];
        return accumulate;
    }
 
    /* program to test above function */
    public static void main(String args[])
    {
        int k[] = MissingNum{ 1, 2, 4, 5, 6 };
        int num = (k, 5);
        System.out.println(num);
    }
}