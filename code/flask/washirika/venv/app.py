import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle
from sklearn import *

app = Flask(__name__)

#pickle model
model = pickle.load(open("D:\Xampp\htdocs\washirika-1\code\Flask\washirika\Venv\model.pkl", "rb"))

@app.route("/")
def main():
    return render_template("inputs.php")

@app.route("/predict", methods=['POST','GET'])
def predict():
    #data1 = request.form['loan']
    #data2 = request.form['employer']
    data3 = request.form['amount']
    array = np.array([[data3]])
    arr = array.astype(np.float)
    pred = model.predict(arr)
    return render_template("inputs.php", data=pred)

if __name__ == "__main__":
    app.run(debug=True)