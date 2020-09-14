const express = require('express');
const app = express();

app.get('/', (req, res) => {
    res.send('Hello World!')
  });

  app.post('/', function (req, res) {
    res.send('Got a POST request')
  });

  app.put('/user', function (req, res) {
    res.send('Got a PUT request at /user')
  });

  app.delete('/user', function (req, res) {
    res.send('Got a DELETE request at /user')
  });

 app.listen(3002, () => console.log('Listining on port 3002...'));