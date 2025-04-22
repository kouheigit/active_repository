import { useCounter } from "./hooks/useCounter1";
import React, { useState,useEffect  } from "react";

export default function Todo3(){
    //配列を格納する
    const [todos,setTodos] = useState([]);
    const[inputs,setInput] = useState('');

    return(
     <div className="todo3">
         <input type="text" value={inputs} onChange={(e)=>setInput(e.target.value)}/>
         <p>入力された値{inputs}</p>
         
     </div>
    );
}
