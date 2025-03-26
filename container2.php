import React, { useState } from 'react';
import './Login.css'; // Esta linha importa o CSS

const LoginPage = () => {
  // Resto do código permanece o mesmo...
}

  const [selectedRole, setSelectedRole] = useState(null);

  const handleEmployeeLogin = () => {
    setSelectedRole('employee');
    // Redirect to employee login form or process
    console.log('Employee login selected');
  };

  const handleVisitorAccess = () => {
    setSelectedRole('visitor');
    // Redirect to main site
    console.log('Visitor access selected');
  };

  return (
    <div className="min-h-screen bg-gray-100 flex items-center justify-center px-4 py-8">
      <div className="max-w-md w-full bg-white rounded-xl shadow-lg p-8 space-y-6">
        <div className="text-center">
          <h1 className="text-3xl font-bold text-gray-800 mb-4">Bem-vindo</h1>
          <p className="text-gray-600 mb-6">Escolha sua forma de acesso</p>
        </div>

        <div className="space-y-4">
          <button 
            onClick={handleEmployeeLogin}
            className="w-full flex items-center justify-center py-3 px-4 
                       bg-blue-500 text-white rounded-lg 
                       hover:bg-blue-600 transition duration-300 
                       focus:outline-none focus:ring-2 focus:ring-blue-400"
          >
            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            Funcionário
          </button>

          <div className="flex items-center justify-center my-4">
            <div className="border-t border-gray-300 flex-grow mr-3"></div>
            <span className="text-gray-500 text-sm">OU</span>
            <div className="border-t border-gray-300 flex-grow ml-3"></div>
          </div>

          <button 
            onClick={handleVisitorAccess}
            className="w-full flex items-center justify-center py-3 px-4 
                       bg-green-500 text-white rounded-lg 
                       hover:bg-green-600 transition duration-300 
                       focus:outline-none focus:ring-2 focus:ring-green-400"
          >
            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M18.364 5.636l-3.536 3.536m0 4.243l3.536 3.536M9.172 9.172L5.636 5.636m3.536 4.243L5.636 12.12m4.242 4.242l3.536-3.536m-3.536-4.242l3.536-3.536" />
            </svg>
            Visitante
          </button>
        </div>

        <div className="text-center text-sm text-gray-500 mt-6">
          © 2024 Sua Empresa. Todos os direitos reservados.
        </div>
      </div>
    </div>
  );
};

export default LoginPage;
