#include <SoftwareSerial.h>
SoftwareSerial uno(2, 3);

//Set Ph Sensor
float calibration_value = 21.34;
int phval = 0; 
unsigned long int avgval; 
int buffer_arr[10],temp;

//Set TDS Meter
#define TdsSensorPin A1
#define VREF 5.0              // referensi tegangang analog dari ADC
#define SCOUNT  30            // sum of sample point

int analogBuffer[SCOUNT];     // ADC menyimpan nilai analog ke array kemudian dibaca dari ADC
int analogBufferTemp[SCOUNT];
int analogBufferIndex = 0;
int copyIndex = 0;

float averageVoltage = 0;
float tdsValue = 0;
float temperature = 16;      

// median filtering algorithm
int getMedianNum(int bArray[], int iFilterLen){
  int bTab[iFilterLen];
  for (byte i = 0; i<iFilterLen; i++)
  bTab[i] = bArray[i];
  int i, j, bTemp;
  for (j = 0; j < iFilterLen - 1; j++) {
    for (i = 0; i < iFilterLen - j - 1; i++) {
      if (bTab[i] > bTab[i + 1]) {
        bTemp = bTab[i];
        bTab[i] = bTab[i + 1];
        bTab[i + 1] = bTemp;
      }
    }
  }
  if ((iFilterLen & 1) > 0){
    bTemp = bTab[(iFilterLen - 1) / 2];
  }
  else {
    bTemp = (bTab[iFilterLen / 2] + bTab[iFilterLen / 2 - 1]) / 2;
  }
  return bTemp;
}


void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  uno.begin(9600);
  pinMode(TdsSensorPin, INPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
  //Ph_Sensor
      for(int i=0;i<10;i++) 
 { 
    buffer_arr[i]=analogRead(A0);
    delay(30);
 }
    for(int i=0;i<9;i++)
 {
    for(int j=i+1;j<10;j++)
 {
    if(buffer_arr[i]>buffer_arr[j])
 {
    temp=buffer_arr[i];
    buffer_arr[i]=buffer_arr[j];
    buffer_arr[j]=temp;
   }
  }
 }
 avgval=0;
 for(int i=2;i<8;i++)
 avgval+=buffer_arr[i];
 float volt=(float)avgval*5.0/1024/6;
 float ph_act = -5.70 * volt + calibration_value;
 Serial.print("pH Val:");
 Serial.print(ph_act);
 Serial.print("\n");
 delay(1000);
 
  //TDSSensor();
   static unsigned long analogSampleTimepoint = millis();
  if(millis()-analogSampleTimepoint > 40U){     //every 40 milliseconds,read the analog value from the ADC
    analogSampleTimepoint = millis();
    analogBuffer[analogBufferIndex] = analogRead(TdsSensorPin);    //read the analog value and store into the buffer
    analogBufferIndex++;
    if(analogBufferIndex == SCOUNT){ 
      analogBufferIndex = 0;
    }
  }   
  
  static unsigned long printTimepoint = millis();
  if(millis()-printTimepoint > 800U){
    printTimepoint = millis();
    for(copyIndex=0; copyIndex<SCOUNT; copyIndex++){
      analogBufferTemp[copyIndex] = analogBuffer[copyIndex];
      
      // read the analog value more stable by the median filtering algorithm, and convert to voltage value
      averageVoltage = getMedianNum(analogBufferTemp,SCOUNT) * (float)VREF / 1024.0;
      
      //temperature compensation formula: fFinalResult(25^C) = fFinalResult(current)/(1.0+0.02*(fTP-25.0)); 
      float compensationCoefficient = 1.0+0.02*(temperature-25.0);
      //temperature compensation
      float compensationVoltage=averageVoltage/compensationCoefficient;
      
      //convert voltage value to tds value
      tdsValue=(133.42*compensationVoltage*compensationVoltage*compensationVoltage - 255.86*compensationVoltage*compensationVoltage + 857.39*compensationVoltage)*0.5;
      
      Serial.print("voltage:");
      Serial.print(averageVoltage,2);
      Serial.print("V   ");
      Serial.print("TDS Value:");
      Serial.print(tdsValue,0);
      Serial.println("ppm");
    }
  }
  if(uno.available()>0)
  {
    uno.write(ph_act);
    uno.write(tdsValue);
  }
}
