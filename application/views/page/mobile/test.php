<html>
   <head>
      <title>JavaScript MQTT WebSocket Example</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript">
     </script>
     <script type = "text/javascript" language = "javascript">
        var mqtt;
        var reconnectTimeout = 2000;
        var host="203.151.89.57"; //change this
        var port=1901;
        
        function onConnect() {
      // Once a connection has been made, make a subscription and send a message.
    
        console.log("Connected ");
        //mqtt.subscribe("sensor1");
        message = new Paho.MQTT.Message("Hello World");
        message.destinationName = "sensor1";
        mqtt.send(message);
      }
      function MQTTconnect() {
        console.log("connecting to "+ host +" "+ port);
        mqtt = new Paho.MQTT.Client(host,port,"clientjs");
        //document.write("connecting to "+ host);
        var options = {
            timeout: 3,
            onSuccess: onConnect,
          
         };
         
        mqtt.connect(options); //connect
        }
     
      </script>
   </head>
     <body>
   <h1>Main Body</h1>
    <script>
    MQTTconnect();
    </script>
   </body>  
</html>