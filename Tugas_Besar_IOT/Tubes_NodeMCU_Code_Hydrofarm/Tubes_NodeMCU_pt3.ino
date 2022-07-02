/*************************************************************

  You’ll need:
   - Blynk IoT app (download from App Store or Google Play)
   - ESP8266 board
   - Decide how to connect to Blynk
     (USB, Ethernet, Wi-Fi, Bluetooth, ...)

  There is a bunch of great example sketches included to show you how to get
  started. Think of them as LEGO bricks  and combine them as you wish.
  For example, take the Ethernet Shield sketch and combine it with the
  Servo example, or choose a USB sketch and add a code from SendData
  example.
 *************************************************************/

// Template ID, Device Name and Auth Token are provided by the Blynk.Cloud
// See the Device Info tab, or Template settings
#define BLYNK_TEMPLATE_ID           "TMPLwHGFbc8B"
#define BLYNK_DEVICE_NAME           "tubesiot"
#define BLYNK_AUTH_TOKEN            "YtiRKoxTRFz3s73rjGKJUEBp4nEvCiNc"


// Comment this out to disable prints and save space
#define BLYNK_PRINT Serial

#include <SoftwareSerial.h>
SoftwareSerial mcu (D6,D5);

#include <ESP8266WiFi.h>
#include <BlynkSimpleEsp8266.h>

char auth[] = BLYNK_AUTH_TOKEN;

// Your WiFi credentials.
// Set password to "" for open networks.
char ssid[] = "K3NO7";
char pass[] = "31052022";


float data;
float tds;
void setup()
{
  // Debug console
  Serial.begin(115200);
  mcu.begin(9600);
  Blynk.begin(auth, ssid, pass);
  // You can also specify server:
  //Blynk.begin(auth, ssid, pass, "blynk.cloud", 80);
  //Blynk.begin(auth, ssid, pass, IPAddress(192,168,1,100), 8080);
}

void loop()
{
  mcu.write("mcu");
  if (mcu.available()>0)
  {
    data=mcu.read();
    Serial.print("data tds:");
    Blynk.virtualWrite(V3, tds);
    Serial.println(tds);
    tds=mcu.read();
    Serial.print("data ph:");
    Blynk.virtualWrite(V2, data);
    Serial.println(data);
  }
  Blynk.run();
  // You can inject your own code or combine it with other sketches.
  // Check other examples on how to communicate with Blynk. Remember
  // to avoid delay() function!
}
