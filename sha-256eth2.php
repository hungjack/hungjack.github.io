<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sha3-256 File Hash Online</title>
  <link rel="stylesheet" href="main.css">
  <script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
</head>
<body>
  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="SHA3-256 online hash file checksum function">
    <title>SHA3-256 File Checksum Online
    </title>
    <script>
      if (location.hostname != 'localhost') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-44208259-6', 'auto');
        ga('send', 'pageview');
      }
    </script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
	 <script src="js/digitalsign.js"></script>
  </head>
  <body>
    <div id="header">
      <h1><a href="sha-256test.php">上傳合約文件</a></h1>
    </div>
    <div id="body">
      <script src="js/main.js"></script>
      <div id="main">
        <h1>SHA3-256 File Checksum
        </h1>
        <div class="description">SHA3-256 online hash file checksum function
        </div>
        <div class="input">
          <div id="droppable-zone">
            <div id="droppable-zone-wrapper">
              <div id="droppable-zone-text">Drop File Here</div>
            </div>
            <input class="droppable-file" id="input" type="file" placeholder="Input2">
          </div>
        </div>
		</br>
        
		<div>
		<section id="sign-and-verify">
        <input type="file" id="source-file"/>
        <button id="verify">Verify Signature (CA驗證)</button>
		<button id="sign" style="background-color:#ffffff;border:3px #ffffff;"></button>
        </section>
		</div><br>
		
		<div class="submit">
          <input class="btn btn-default" id="execute" type="button" value="Hash">
        </div>
	   
	   <div class="output">
		  <form action="sha-256eth2.php" method="post">
		  <textarea id="output" placeholder="Output" name="address"></textarea>
          <br>Owner：<input type="text" name="Owner">格式為:0x000000000.....
		  <br>expiry date：<input type="text" name="date">格式為:20211107 
		  <br>Carbon capture：<input type="text" name="capture">碳捕捉量(必須為奇數個位元)<br>
					<input type="submit" value="送出">
					<p>先按"送出"再按"確認上傳區塊鏈"</p>
					<?php
						if(isset($_POST['address'])){
							$address = $_POST['address'];
							$Owner = $_POST['Owner'];
							$Owner2 = '0xc7eBE8cdc2B787Fe0a56D024367FCc4eDCFB8D87';
							$date = $_POST['date'];
							//$date = dechex($date); (16進位)
							$date = strtotime($date); //(轉unix timestamp)
							$capture = $_POST['capture'];
							//$capture1 = $capture*0.8;
							//$capture2 = $capture*0.2;
							echo "目前字串:<br>".$address.$date.$capture;
							echo '<input type="button" id="addString" value="上傳到區塊鏈"><br>';
						}
					?>
		  </form>
		 
        <section id="results">
        <ul id="download-links">
        </ul>
        </section>       
		<div>	
		<p>
	     <span id="message"></span>
        </p>
        <p>
	    <span id="eventLog"></span>
        </p>
		</div>
        </div>
      </div>
      
        <div class="clearfix"></div>
      </div>
      <script src="https://cdn.jsdelivr.net/gh/emn178/js-sha3/build/sha3.min.js"></script>
      <script>method = sha3_256;</script>
    </div>
    <div id="footer">&copy; 2021 Online Tools</div>
	


	
	<script>
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
        // smart contract address
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

//async function mint(){
			//document.getElementById('message').textContent='交易處理中,請稍後';
             //Contract.methods.mint(<?php if(isset($receiver) && isset($amount)) echo '"'.$receiver.'","'.$amount.'"' ?>).send({from:accounts[0]})
            //.then(function(data){
                //console.log(data);
				//document.getElementById('message').textContent='交易處理結束';
            //})        
        //}
		
async function addString(){//ok
            document.getElementById('message').textContent='交易處理中,請稍後';
			//web3.eth.accounts.hashMessage(web3.utils.utf8ToHex("Hello World"));
			//Contract.methods.addString(<?php if(isset($address)) echo '"'.$address.'"' ?>).send({from:accounts[0]})
			web3.eth.sendTransaction({from:accounts[0],gasPrice: "20000000000",gas: "50000",to:accounts[0], value: 0, data:<?php if(isset($address)) echo '"'.$address.''.$date.''.$capture.'"'?>})
            .then(function(data){
                console.log(data);
				const obj = JSON.parse(JSON.stringify(data));
				document.getElementById('message').textContent='上傳文件成功';
				document.getElementById('eventLog').innerHTML="transactionHash:"+obj.transactionHash;
			Contract.methods.mint(<?php if(isset($Owner) && isset($capture)) echo '"'.$Owner.'","'.$capture.'"' ?>,obj.transactionHash).send({from:accounts[0]})
            .then(function(data){
                console.log(data);
				document.getElementById('message').textContent='發幣成功';
            })  
            //Contract.methods.mint(<?php if(isset($Owner2) && isset($capture)) echo '"'.$Owner2.'","'.$capture2.'"' ?>,obj.transactionHash).send({from:accounts[0]})
            //.then(function(data){
                //console.log(data);
				//document.getElementById('message').textContent='交易處理結束';
            //})        
			
				
            })
			//string=" ";
			//document.getElementById('eventLog').innerHTML=string;
			//document.getElementById('message').textContent='交易處理中,請稍後';
            //Contract.methods.mint(<?php if(isset($Owner) && isset($capture)) echo '"'.$Owner.'","'.$capture.'"' ?>).send({from:accounts[0]})
            //.then(function(data){
                //console.log(data);
				//document.getElementById('message').textContent='交易處理結束';
            //})        
			//string=" ";
			//document.getElementById('eventLog').innerHTML=string;
        }
		


	
	//document.getElementById('sayhello').addEventListener('click',sayhello);
	//document.getElementById('totalSupply').addEventListener('click',totalSupply);
	//document.getElementById('symbol').addEventListener('click',symbol);

	<?php 
		if(isset($address))
			echo "document.getElementById('addString').addEventListener('click',addString);";
		
	?>
	
    

	
	

</script>
  </body>
</html>