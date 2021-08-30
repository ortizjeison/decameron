import json, os
import contentful


space = os.environ['space']
token = os.environ['accessToken']
  
client = contentful.Client(space, token)
def lambda_handler(event, context):
    
    roomID = event['queryStringParameters']['roomID']
    dateIn = event['queryStringParameters']['dateIn']
    dateOut = event['queryStringParameters']['dateOut']
    adults = event['queryStringParameters']['adults']
    children = event['queryStringParameters']['children']
    
    room = client.entry(roomID)
    
    
    return {
        'statusCode': 200,
        'body': json.dumps(str((room.price)))
    }