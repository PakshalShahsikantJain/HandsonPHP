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

        public function MaxElement()
        {
            $temp = $this->Head;
            $iMax = 0;

            $iMax = $temp->data;
            while($temp != null)
            {
                if($temp->data > $iMax)
                {
                    $iMax = $temp->data;
                }
                $temp = $temp->next;
            }

            return $iMax;
        }
    }
    function main() 
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";
        
        $sobj = new SinglyLL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertLast(105);
        $sobj->InsertLast(100);
        $sobj->Display();
        
        $iret = $sobj->Count();
        printf("<br>Count of Elements From Linked list is : %d",$iret);

        $iret = $sobj->MaxElement();
        printf("<br>Max Element From Linked list is : %d",$iret);
    
    }

    main();
?>