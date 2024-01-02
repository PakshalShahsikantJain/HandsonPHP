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

        public function DisplayProduct()
        {
            $Head = $this->Head;
            $Digit = 0;
            $imult = 1;
            $iNo = 0;

            echo("<br>Product of Digits of Elements of linked List are : ");
            while($Head != null)
            {
                $iNo = $Head->data;
                while($iNo != 0)
                {
                    $Digit = $iNo % 10;
                    if($Digit == 0)
                    {
                        $Digit = 1;
                    }
                    $imult = $imult * $Digit;
                    $iNo = floor($iNo / 10);
                }

                printf("%d &nbsp;&nbsp;",$imult);
                $imult = 1;
                $Head = $Head->next;
            }
        }
    }

    function main() 
    {
        $iret = 0 ;

        echo "Jay Ganesh....";
        
        $sobj = new SinglyLL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertLast(17);
        $sobj->InsertLast(41);
        $sobj->InsertLast(999983);

        $sobj->Display();
        $iret = $sobj->Count();
        echo "Count of Elements From linked list is : ",$iret;
        
        $sobj->DisplayProduct();
    }

    main();
?>