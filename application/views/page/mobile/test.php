

<script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
 
<script>
client = new Paho.MQTT.Client("203.151.89.57", Number(1901), "clientId");
client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;

client.connect({onSuccess:onConnect});

function onConnect() {
  console.log("onConnect");
  client.subscribe("TEST/MQTT");
  message = new Paho.MQTT.Message("Hello MQTT");
  message.destinationName = "TEST/MQTT";
  client.send(message);
}

function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("onConnectionLost:"+responseObject.errorMessage);
  }
}

function onMessageArrived(message) {
  console.log("onMessageArrived:"+message.payloadString);
}
</script>
