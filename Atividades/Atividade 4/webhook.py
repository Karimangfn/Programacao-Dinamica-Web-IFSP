import requests
import json

webhook_url = 'http://127.0.0.1:5000/webhook'

payload = {
    'Nome': 'Kariman Gomes',
    'Disciplina': 'Programação Dinamica para Web'
}

headers = {
    'Content-Type': 'application/json'
}

r = requests.post(webhook_url, data=json.dumps(payload), headers=headers)