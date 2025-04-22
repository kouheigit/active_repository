import { useCounter } from "./hooks/useCounter1";
import { useState,useEffect  } from "react";

export default function Todo3(){
    //配列を格納する
    const [todos,setTodos] = useState([]);
    const[inputs,setInput] = useState('');

    return(
     <div className="todo3">
         <h1>表示テスト</h1>
     </div>
    );
}
