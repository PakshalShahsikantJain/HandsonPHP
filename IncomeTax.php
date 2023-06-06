<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 02/06/2023
        Program : Design application for income tax department to calculate tax
                amount. According to the income tax department there is no
                income tax for the income less than 5 lakhs.

                If income is in between 5 to 10 lakhs then there will be 10% tax.

                If income is in between 10 to 20 lakhs then there will be 20%
                tax.

                And for more than 20 lakhs there will be 30% tax.
                We have to accept gross income from user and return the tax
                amount.
    */

    //Function To Calculate Income Tax
    function TaxCalc($No)
    {
        $ans = 0;

        //Logic To Calculate Income Tax

        //Handeling Condition if Income is less Than 5L
        if($No < 500000)
        {
            return $ans;
        }

        //Handeling Condition if Income is in Between 5L To 10L
        else if(($No >= 500000)&&($No < 1000000))
        {
            $ans = ($No * 10) / 100;

            return $ans;
        }

        //Handeling Condition if Income is in Between 10L To 20L
        else if(($No >= 1000000)&&($No <= 2000000))
        {
            $ans = ($No * 20) / 100;

            return $ans;
        }

        //Handeling Condition if Income is Greater Than 20L
        else 
        {
            $ans = ($No * 30) / 100;

            return $ans;
        }
    }

    //Main Function
    function main() 
    {
        $No = 3000000;
        $iret = 0;

        echo "Jay Ganesh....<br>";
        
        echo "--------Marvellous Tax Calculator---------<br>";
        
        //Call To TaxCalc Function
        $iret = TaxCalc($No);

        echo "You Have To Pay Taxable Amount of : ",$iret;
    }

    //Call To Main Function
    main();
?>