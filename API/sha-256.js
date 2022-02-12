var abi = [
	{
		"constant": true,
		"inputs": [],
		"name": "name",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "stop",
		"outputs": [],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_spender",
				"type": "address"
			},
			{
				"name": "_value",
				"type": "uint256"
			}
		],
		"name": "approve",
		"outputs": [
			{
				"name": "success",
				"type": "bool"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "totalSupply",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_from",
				"type": "address"
			},
			{
				"name": "_to",
				"type": "address"
			},
			{
				"name": "_value",
				"type": "uint256"
			}
		],
		"name": "transferFrom",
		"outputs": [
			{
				"name": "success",
				"type": "bool"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "decimals",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "address"
			}
		],
		"name": "balanceOf",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "stopped",
		"outputs": [
			{
				"name": "",
				"type": "bool"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_to",
				"type": "address"
			},
			{
				"name": "_value",
				"type": "uint256"
			},
			{
				"name": "_data",
				"type": "bytes"
			}
		],
		"name": "mint",
		"outputs": [],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "symbol",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_to",
				"type": "address"
			},
			{
				"name": "_value",
				"type": "uint256"
			}
		],
		"name": "transfer",
		"outputs": [
			{
				"name": "success",
				"type": "bool"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_value",
				"type": "uint256"
			},
			{
				"name": "date",
				"type": "uint256"
			}
		],
		"name": "burn",
		"outputs": [],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "start",
		"outputs": [],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_name",
				"type": "string"
			}
		],
		"name": "setName",
		"outputs": [],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "address"
			},
			{
				"name": "",
				"type": "address"
			}
		],
		"name": "allowance",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "_from",
				"type": "address"
			},
			{
				"indexed": true,
				"name": "_to",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "_value",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "data",
				"type": "bytes"
			}
		],
		"name": "Transfer",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "_owner",
				"type": "address"
			},
			{
				"indexed": true,
				"name": "_spender",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "_value",
				"type": "uint256"
			}
		],
		"name": "Approval",
		"type": "event"
	}
]
        var address = '0x5B25337903a4Be9bDc8ba6569600512c42dFe1e0';

window.addEventListener('load', async () => {
    // 偵測到使用的是新版MetaMask
    if (window.ethereum) {
        window.web3 = new Web3(ethereum);
        try {
            // 請求用戶授權
            await ethereum.enable(); 
            // Acccounts now exposed
			accounts = await web3.eth.getAccounts();
			Contract = await new web3.eth.Contract(abi,address);
			//console.log(accounts[0]);
			//console.log(Contract);
            //web3.eth.sendTransaction({/* ... */});
			
        } catch (error) {
            // User denied account access...
        }
    }
    // 偵測到使用的是舊版MetaMask
    else if (window.web3) {
        window.web3 = new Web3(web3.currentProvider);
        // Acccounts always exposed
		accounts = await web3.eth.getAccounts();
			Contract = await new web3.eth.Contract(abi,address);
        //web3.eth.sendTransaction({/* ... */});
		
    }
    // Non-dapp browsers...
    else {
        console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
		//alert('Non-Ethereum browser detected. You should consider trying MetaMask!');
    }
	
});

		

		

async function addString(){//ok
            const nameElement = document.getElementById("output");
            const output = nameElement.value;
            const emailElement = document.getElementById("Owner");
            const Owner = emailElement.value;
			const date1 = document.getElementById("date");
			const date = date1.value;
			const time3 = Date.parse(date);
            const cap = document.getElementById("capture");
            const capture = cap.value;
			const Array =[output,time3,capture];
			const str =Array.join('');
			//console.log(str);


            document.getElementById('message').textContent='交易處理中,請稍後';
			//web3.eth.accounts.hashMessage(web3.utils.utf8ToHex("Hello World"));
			//Contract.methods.addString(<?php if(isset($address)) echo '"'.$address.'"' ?>).send({from:accounts[0]})
			web3.eth.sendTransaction({from:accounts[0],gasPrice: "20000000000",gas: "50000",to:accounts[0], value: 0, data:str})
            .then(function(data){
                console.log(data);
				const obj = JSON.parse(JSON.stringify(data));
				document.getElementById('message').textContent='上傳文件成功';
				document.getElementById('eventLog').innerHTML="transactionHash:"+obj.transactionHash;
			Contract.methods.mint(Owner,capture,obj.transactionHash).send({from:accounts[0]})
            .then(function(data){
                console.log(data);
				document.getElementById('message').textContent='發幣成功';
            }) 
            }) 
}			