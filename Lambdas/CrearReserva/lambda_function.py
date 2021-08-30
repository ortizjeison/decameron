import json
import mysql.connector

def lambda_handler(event, context):
    
    usuarioID = event['queryStringParameters']['usuarioID']
    servicioID = event['queryStringParameters']['roomID']
    dateIn = event['queryStringParameters']['dateIn']
    dateOut = event['queryStringParameters']['dateOut']
    adults = event['queryStringParameters']['adults']
    children = event['queryStringParameters']['children']
    
    try:
        mydb = mysql.connector.connect(
          host="decameron-reservas.czyhoxxyaeya.us-east-1.rds.amazonaws.com",
          user="admin",
          password="adminadmin",
          database="decamerondb"
        )
        
    except:
        return {
        'statusCode': 500,
        'body': json.dumps("Falló la conexión a la DB")
        }

    try:
        
        #HAY QUE INCLUIR EL ID DEL USUARIO!!!
        mycursor = mydb.cursor()
        sql = "INSERT INTO reserva (usuarioID, servicioID, dateIn, dateOut, adults, children) VALUES (%s, %s,%s,%s,%s,%s)"
        val = (usuarioID, servicioID, dateIn, dateOut, adults, children)
        control = mycursor.execute(sql, val)
        mydb.commit()

    except Exception as e:
        return {
        'statusCode': 500,
        'body': json.dumps(str(e))
        }
        
    mycursor.close()
    mydb.close()
    
    return {
        'statusCode': 200,
        'body': json.dumps("Registro insertado")
    }
