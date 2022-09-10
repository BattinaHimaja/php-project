from tkinter import N


class Node:
    def __init__(self,data):
        self.data=data
        self.next=None
class Sll:
    def __init__(self):
        self.head=None
    def insertatfront(self,data):
        n=Node(data)
        if(self.head is None):
            n.next=None
            self.head=n
        else:
            n.next=self.head
            self.head=n
    def insertatlast(self,data):
        n=Node(data)
        if(self.head is None):
            n.next=None
            self.head=n
        else:
            p=self.head
            while(p.next is not None):
                t=p
                p=p.next
            p.next=n
    def insertatany(self,data,pos):
        n=Node(data)
        j=1
        p=self.head
        while(j<pos):
            t=p
            p=p.next
            j=j+1
        t.next=n 
        n.next=p
    def display(self):
        if(self.head is None):
            print("empty")
        else:
            k=self.head
            while(k is not None):
                print(k.data+" ")
                k=k.next
sll=Sll()
sll.display()
sll.insertatfront(10)
sll.display()

