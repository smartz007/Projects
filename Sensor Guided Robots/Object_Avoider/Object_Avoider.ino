void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);       // Begins the Serial Communication with the BAut rate 9600.
  pinMode(10, OUTPUT);      // Setting the 10, 11, 12, 13 as OUTPUT pins.
  pinMode(11, OUTPUT);
  pinMode(12, OUTPUT);
  pinMode(13, OUTPUT);
  pinMode(A0, INPUT);       // Sets the Analog Pins A0, A1 as INPUT pins.
  pinMode(A1, INPUT);
}

void moveRobot(String movement){
    if(movement == "Forward") {
        digitalWrite(10, HIGH);
        digitalWrite(11, LOW);
        digitalWrite(12, HIGH);
        digitalWrite(13, LOW);
        Serial.println("MOVED FORWARD...");
      }
      else if(movement == "Backward") {
        digitalWrite(10, LOW);
        digitalWrite(11, HIGH);
        digitalWrite(12, LOW);
        digitalWrite(13, HIGH);
        Serial.println("MOVED BACKWARD...");
      }
      else if(movement == "Left") {
        digitalWrite(10, HIGH);
        digitalWrite(11, LOW);
        digitalWrite(12, LOW);
        digitalWrite(13, HIGH);
        Serial.println("ROTATED LEFT...");
      }
      else if(movement == "Right") {
        digitalWrite(10, LOW);
        digitalWrite(11, HIGH);
        digitalWrite(12, HIGH);
        digitalWrite(13, LOW);
        Serial.println("ROTATED RIGHT...");
      }
      else if(movement == "Stop") {
        digitalWrite(10, LOW);
        digitalWrite(11, LOW);
        digitalWrite(12, LOW);
        digitalWrite(13, LOW);
        Serial.println("Robot Stopped...");
      }
  }

void loop() {
  // put your main code here, to run repeatedly:

  int Right = analogRead(A0);
  int Left = analogRead(A1);
//  Serial.print("Value of Right Sensor:" + String(Right));
//  Serial.print("\t");
//  Serial.print("Value of Left Sensor:" + String(Left));
//  Serial.print("\n");
//  delay(1000);

  if((Right > 400) && (Left > 400)) {
      moveRobot("Stop");
      delay(1000);
      moveRobot("Backward");
      delay(1000);
      moveRobot("Left");
      delay(500);
    }
   if((Right < 400) && (Left < 400)) {
      moveRobot("Forward");
    }
     if((Right > 400) && (Left < 400)) {
      moveRobot("Stop");
      delay(1000);
      moveRobot("Backward");
      delay(1000);
      moveRobot("Left");
      delay(500);
    }
     if((Right < 400) && (Left > 400)) {
      moveRobot("Stop");
      delay(1000);
      moveRobot("Backward");
      delay(1000);
      moveRobot("Right");
      delay(500);
    }
}
