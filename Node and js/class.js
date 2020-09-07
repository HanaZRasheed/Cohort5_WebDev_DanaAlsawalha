class Person{
    constructor(){
        this.id = 0;
        this.name = null;
        this.salary = 0;
    }

    tellId(){
       return `YOUR ID IS: ${this.id}, AND YOUR SALARY: ${this.salary}`;
    }
}

p1=new Person();
p1.id = 14;
p1.name = "Rahaf";
p1.salary = 500;
console.log(p1);

p2=new Person();
p2.id = 15;
p2.name = "Sara";
p2.salary = 300;
console.log(p2);
console.log(p2.tellId());