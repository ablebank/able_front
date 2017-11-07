//import web3 from 'web3'
var Web3 = require('./node_modules/web3');

var web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));

//console.log(web3);

var version = web3.version.node;
console.log(version);
