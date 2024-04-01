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

        public function InsertAtPos($value,$ipos)
        {
            $isize = 0;
            $i = 0;
            $temp = $this->Head;
            $newn = null;
            $isize = $this->Count();

            if(($ipos < 1)||($ipos > ($isize + 1)))
            {
                return;
            }
            else if($ipos == 1)
            {
                $this->InsertFirst($value);
            }
            else if($ipos == ($isize + 1))
            {
                $this0->InsertLast($value);
            }
            else 
            {
                $newn = new Node();
                $newn->data = $value;

                for($i = 1;$i < ($ipos - 1);$i++)
                {
                    $temp = $temp->next;
                }

                $newn->next = $temp->next;
                $temp->next = $newn;
            }
        }

        public function DeleteFirst()
        {
            $temp = $this->Head;

            if($this->Head != null)
            {
                $this->Head = ($this->Head)->next;
                $temp = null;
            }
        }

        public function DeleteLast()
        {
            $temp = $this->Head;

            if($this->Head == null)
            {
                return;
            }
            else if(($this->Head)->next == null)
            {
                $this->Head = null;
                return;
            }
            else 
            {
                while($temp->next->next != null)
                {
                    $temp = $temp->next;
                }

                $temp->next = null;
            }
        }

        public function DeleteAtPos($ipos)
        {   
            $isize = 0;
            $i = 0;
            $temp = $this->Head;
            $temp2 = null;

            $isize = $this->Count();
            
            if(($ipos < 1)||($ipos > $isize))
            {
                return;
            }
            else if($ipos == 1)
            {
                $this->DeleteFirst();
                return;
            }
            else if($ipos == $isize)
            {
                $this->DeleteLast();
                return;
            }
            else 
            {
                for($i = 1;$i < ($ipos - 1);$i++)
                {
                    $temp = $temp->next;
                }

                $temp2 = $temp->next;
                $temp->next = $temp2->next;
                $temp2 = null;
            }
        }

        public function Display()
        {
            $temp = $this->Head;

            print("Elements of Linked List are : <br>");
            while($temp != null)
            {
                printf("|%d|=>",$temp->data);
                $temp = $temp->next;
            }
            print("<br>");
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

        echo "Jay Ganesh.....<br>";

        echo "-----------------------------------------------------------------Singly Linear Linked List Demonstration------------------------------------------------------------------------------<br>";
        $sobj = new SinglyLL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertLast(60);
        $sobj->InsertLast(101);
        $sobj->InsertLast(120);

        $sobj->Display();
        $iret = $sobj->Count();
        printf("Count of Elements Present in Linked List is : %d<br>",$iret);

        echo "---------------Updated Linked List after Inserting Element At Given Position-----------------------<br>";
        $sobj->InsertAtPos(21,3);
        $sobj->Display();
        $iret = $sobj->Count();
        printf("Count of Elements Present in Linked List is : %d<br>",$iret);

        echo "---------------Updated Linked List after Deleting Element From First Position-----------------------<br>";
        $sobj->DeleteFirst();
        $sobj->Display();
        $iret = $sobj->Count();
        printf("Count of Elements Present in Linked List is : %d<br>",$iret);

        echo "---------------Updated Linked List after Deleting Element From Last Position-----------------------<br>";
        $sobj->DeleteLast();
        $sobj->Display();
        $iret = $sobj->Count();
        printf("Count of Elements Present in Linked List is : %d<br>",$iret);

        echo "---------------Updated Linked List after Deleting Element From Given Position-----------------------<br>";
        $sobj->DeleteAtPos(2);
        $sobj->Display();
        $iret = $sobj->Count();
        printf("Count of Elements Present in Linked List is : %d<br>",$iret);
    }   

    main();
?>