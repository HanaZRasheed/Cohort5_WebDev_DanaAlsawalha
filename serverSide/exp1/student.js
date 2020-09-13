class Student {
    constructor() {
        this.id = 0;
        this.name = null;
        this.avg = 0;
    }

    hello() {
        return `My Id is ${this.id} My name is ${this.name} and my avg is ${this.avg}`;
    }
}

var std = { id: 80, name: "Dana", avg: 98 };

module.exports = Student;