import React, { useState } from 'react';
export default function Todo(){
    const [todos,setTodos] = useState([]);
    const [inputs,setInput] = useState('');

    const addTodo = ()=>{
        if(inputs.trim()==='') return;
        setTodos([...todos,inputs]);
        setInput('');
    };
    const deleteTodo = (deleteIndex) => {
        setTodos(todos.filter((_, index) => index !== deleteIndex));
    };

    return (
        <div>
            <input type="text" value={inputs} onChange={(e) => setInput(e.target.value)}/>
            <p>入力された値: {inputs}</p>
            <button onClick={addTodo}>追加</button>
            {todos.map((todo,index)=>(
                <li key={index}>{todo}<button onClick={() => deleteTodo(index)}>削除</button></li>
            ))}
        </div>
    )
}


