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
            $newn->data =  $value;
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
            $newn->data =  $value;
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
            $temp = $this->Head;    
            while($temp != null)
            {
                printf("|%d|=>",$temp->data);
                $temp = $temp->next;
            }
        }
        public function Count()
        {
            $temp = $this->Head;
            $icnt = 0;

            while($temp != null)
            {
                $icnt++;
                $temp = $temp->next;
            }

            return $icnt;
        }
        public function Addition()
        {
            $temp = $this->Head;
            $isum = 0;

            while($temp != null)
            {
                $isum = $isum + $temp->data;
                $temp = $temp->next;
            }

            return $isum;
        }
    }
    
    function main()
    {
        echo "Jay Ganesh....<br>";
        $iret = 0;

        $sobj = new SinglyLL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertLast(101);
        $sobj->InsertLast(210);
        $sobj->Display();
        
        $iret = $sobj->Count();
        echo "<br>Count of Elements From linked list is : ",$iret;

        $iret = $sobj->Addition();
        echo "<br>Count of Elements From linked list is : ",$iret;
    }

    main();
?>