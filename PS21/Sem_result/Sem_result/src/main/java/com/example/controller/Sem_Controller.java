package com.example.controller;

import com.example.model.Sem_model;
import com.example.service.Sem_service;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/results")
@CrossOrigin(origins = "http://localhost:3000")
public class Sem_Controller {

    @Autowired
    private Sem_service service;

    @PostMapping
    public Sem_model saveResult(@RequestBody Sem_model result) {
        return service.saveResult(result);
    }

    @GetMapping
    public List<Sem_model> getAllResults() {
        return service.getAllResults();
        
   
    }
}
