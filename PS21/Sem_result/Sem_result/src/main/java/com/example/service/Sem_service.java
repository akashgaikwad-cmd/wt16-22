package com.example.service;

import com.example.model.Sem_model;
import com.example.repo.Sem_repo;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class Sem_service {

    @Autowired
    private Sem_repo repository;

    public Sem_model saveResult(Sem_model result) {
        return repository.save(result);
    }

    public List<Sem_model> getAllResults() {
        return repository.findAll();
    }
}
