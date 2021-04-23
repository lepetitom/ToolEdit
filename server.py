# -*- coding: utf-8 -*-
from flask import Flask, request,jsonify
from flask_cors import CORS, cross_origin

import lettria
import json

app = Flask(__name__)
cors = CORS(app, resources={r"/api/*": {"origins": "*"}})


api_key = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhbmFseXRpY0lkIjoiNjA3ZWI3NjA4NzZkZWE3M2I5NzE2NWU4IiwicHJvamVjdElkIjoiNjA3ZWI3NjA4NzZkZWE3M2I5NzE2NWU5Iiwic3Vic2NyaXB0aW9uSWQiOiI2MDdlYjZlZTg3NmRlYTczYjk3MTY1ZTciLCJpYXQiOjE2MTg5MTg5NTcsImV4cCI6MTY2NzMwMjk1N30.XoD6pPsT2v1KpPwe0sZ49xYPTxVqRBDZFUQ_bjDlzgw'
nlp = lettria.NLP(api_key)

@app.route("/api")
def hello():
    return "Hello World!"

@app.route('/api/hello')
def dashboard():
    return "Hello World!2"

@app.route('/api/post', methods=['POST']) 
@cross_origin(origin='127.0.0.1',headers=['Content- Type','Authorization'])
def foo():
    
    data = request.get_json()
    text = data['data']['text']
    client = lettria.Client(api_key)
    response = client.request(text)
    print(response[0])
    
    return response[0]

if __name__ == "__main__":
    app.run(debug=True)

