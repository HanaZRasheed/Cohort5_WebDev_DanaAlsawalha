var Person = {
    id:"016",
    name:"Dana",
    salary:200,
    tellId(){
      return `YOUR ID IS: ${this.id}`;
    }
};
console.log(Person);
console.log(Person.name);

Person.salary=600;
console.log(Person.salary);

console.log(Person.tellId());
