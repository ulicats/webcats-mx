<template>
    <div
      class="p-6 bg-white rounded-2xl shadow-md hover:shadow-xl transition-all cursor-pointer border border-gray-100 hover:-translate-y-1"
    >
      <div class="text-primary text-4xl mb-4">
        <slot name="icon" />
      </div>
  
      <h3 class="text-xl font-title font-bold text-dark mb-2">
        <slot name="title" />
      </h3>
  
      <p class="text-dark/70 leading-relaxed">
        <slot name="description" />
      </p>
    </div>
  </template>
  