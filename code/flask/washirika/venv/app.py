import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle

app = Flask(__name__)

#pickle model
model = pickle.load(open("D:\Xampp\htdocs\washirika-1\code\Flask\washirika\Venv\model.pkl", "rb"))

@app.route("/", methods=['GET','POST'])
def Home():
    return render_template("inputs.php")

@app.route("/predict", methods=['POST'])
def Predict():
    data1 = request.form['loan']
    data2 = request.form['employer']
    data3 = request.form['amount']
    arr = np.array([[data1, data2, data3]])
    pred = model.predict(arr)
    return render_template("result.php", data=pred)

if __name__ == "__main__":
    app.run(debug=True)