export const validationMiddleware=(schema)=>{
    return (req,res,next)=>{
        const {error}=schema.validate(req.body,{abortEarly:false});
        if(error){
            const formattedErrors=error.details.map((detail)=>({}))
            return res.status(400).json({formattedErrors});
        }
    }
}