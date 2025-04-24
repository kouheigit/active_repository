import { useCounter } from "./hooks/useCounter1";
import React, { useState,useEffect  } from "react";

export default function Todo3(){
    //配列を格納する
    const [todos,setTodos] = useState([]);
    const[inputs,setInput] = useState('');

    const[tests,setTest] = useState('');


    const addTodo = ()=>{
        if(inputs.trim()=='')return;
        setTodos([...todos, { text: inputs,done: false }]);
        setInput('');
    }
    const deleteTodo = (deleteindex) =>{
    }
    //filter関数について
    //filter関数は指定された値をピックアップする関数
    const numbers = [1,2,3,4,5];
    const even = numbers.filter(n => n % 2 === 0);
    console.log(even);
    //

    const word =["plumber","attire","bank","character","choose"];
    const evens = word.filter()

    return(
     <div className="todo3">
         <input type="text" value={inputs} onChange={(e)=>setInput(e.target.value)}/>
         <button onClick={addTodo}>追加</button>
         <p>入力された値{inputs}</p>
         {todos.map((todo,index)=>(
             <li key={index}>
                 <p>{todo.text}</p>
                 <button onClick={()=>delete(index)}>削除する</button>
             </li>

         ))}
     </div>
    );
}
