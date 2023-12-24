<?php
    class NODE 
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
            $newn = new NODE();
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
            $newn = new NODE();
            $newn->data = $value;
            $newn->next = null;
            $temp = $this->Head;

            if($temp == null)
            {
                $temp = $newn;
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
        
        public function FirstOcc($value)
        {
            $temp = $this->Head;
            $icnt = 1;

            while($temp != null)
            {
                if($temp->data != $value)
                {
                    $icnt++;
                }
                else
                {
                    break;
                }
                
                $temp = $temp->next;
            }

            return $icnt;
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
    }
    function main()
    {   
        $iret = 0;

        echo "Jay Ganesh....<br>";

        $sobj = new SinglyLL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertFirst(5);
        $sobj->InsertFirst(2);
        $sobj->InsertLast(11);
        $sobj->InsertLast(101);
        $sobj->InsertLast(201);
        $sobj->Display();
        
        $iret = $sobj->Count();
        echo "<br>Count of Elements From Linked list is : ",$iret;
        
        $iret = $sobj->FirstOcc(11);
        echo "<br>First of Entered Element is at Position number : ",$iret;
    }

    main()
?>