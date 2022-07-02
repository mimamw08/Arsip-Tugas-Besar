#include <SoftwareSerial.h>
SoftwareSerial uno (2,3);

void setup() {
  // put your setup code here, to run once:
uno.begin(9600);
}
void loop() {
  // put your main code here, to run repeatedly:
  int data=50;
  if(uno.available()>0)
  {
    uno.write(data);
  }
}
