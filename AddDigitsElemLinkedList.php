<?php
    class Node 
    {
        public $data;
        public $next;

        public function __construct()
        {
            $this->data = 0;
            $this->next = null;
        }
    }

    class SinglyLL
    {
        public $Head;

        public function __construct()
        {
            $this->Head = null;
        }

        public function InsertFirst($value)
        {
            $newn = new Node();
            $newn->data = $value;
            $newn->next = null;

            if($this->Head == null)
            {
                $this->Head = $newn;
            }
            else
            {
                $newn->next = $this->Head;
                $this->Head = $newn;
            }            
        }

        public function InsertLast($value)
        {
            $newn = new Node();
            $newn->data = $value;
            $newn->next = null;
            $temp = $this->Head;

            if($this->Head == null)
            {
                $this->Head = $newn;
            }
            else
            {
                while($temp->next != null)
                {   
                    $temp = $temp->next;
                }
                $temp->next = $newn;
            }            
        }

        public function Display()
        {
            $Head = $this->Head;

            echo("Elements of linked list are : <br>");
            while($Head != null)
            {
                printf("|%d|=>",$Head->data);
                $Head = $Head->next;
            }
            echo("<br>");
        }

        public function Count()
        {
            $Head = $this->Head;
            $icnt = 0;

            while($Head != null)
            {
                $icnt++;
                $Head = $Head->next;
            }

            return $icnt;
        }

        public function SumDigit()
        {
            $Head = $this->Head;
            $isum = 0;
            $Digit = 0;
            $No = 0 ;

            echo("Addition of Digits of All Elements is as Follows : <br>");
            while($Head != null)
            {
                $No = $Head->data;
                while($No != 0)
                {
                    $Digit = $No % 10;
                    $isum = $isum + $Digit;
                    $No = $No / 10;
                }

                printf("%d &nbsp;&nbsp;",$isum);

                $isum = 0;
                $Head = $Head->next;
            }
        }
    }

    function main() 
    {
        $iret = 0 ;

        echo "Jay Ganesh....<br>";
        
        $sobj = new SinglyLL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertLast(101);
        $sobj->InsertLast(120);
        $sobj->InsertLast(1224);

        $sobj->Display();

        $iret = $sobj->Count();
        echo "Count of Elements From linked list is : ",$iret,"<br>";

        $sobj->SumDigit();
    }

    main();
?>